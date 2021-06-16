/**
 * 
 */
package org.sieca.everis.pdcc.model.importacion;

/**
 * @author ytorregl
 *
 */
public class Transporte {
	
	private String codigoTransportista;
	private String numeroDocumentoTransporte;
	private String fechaDocumentoTransporte;
	/**
	 * 
	 */
	public Transporte() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param codigoTransportista
	 * @param numeroDocumentoTransporte
	 * @param fechaDocumentoTransporte
	 */
	public Transporte(String codigoTransportista, String numeroDocumentoTransporte, String fechaDocumentoTransporte) {
		super();
		this.codigoTransportista = codigoTransportista;
		this.numeroDocumentoTransporte = numeroDocumentoTransporte;
		this.fechaDocumentoTransporte = fechaDocumentoTransporte;
	}
	/**
	 * @return the codigoTransportista
	 */
	public String getCodigoTransportista() {
		return codigoTransportista;
	}
	/**
	 * @param codigoTransportista the codigoTransportista to set
	 */
	public void setCodigoTransportista(String codigoTransportista) {
		this.codigoTransportista = codigoTransportista;
	}
	/**
	 * @return the numeroDocumentoTransporte
	 */
	public String getNumeroDocumentoTransporte() {
		return numeroDocumentoTransporte;
	}
	/**
	 * @param numeroDocumentoTransporte the numeroDocumentoTransporte to set
	 */
	public void setNumeroDocumentoTransporte(String numeroDocumentoTransporte) {
		this.numeroDocumentoTransporte = numeroDocumentoTransporte;
	}
	/**
	 * @return the fechaDocumentoTransporte
	 */
	public String getFechaDocumentoTransporte() {
		return fechaDocumentoTransporte;
	}
	/**
	 * @param fechaDocumentoTransporte the fechaDocumentoTransporte to set
	 */
	public void setFechaDocumentoTransporte(String fechaDocumentoTransporte) {
		this.fechaDocumentoTransporte = fechaDocumentoTransporte;
	}
	
	


}
