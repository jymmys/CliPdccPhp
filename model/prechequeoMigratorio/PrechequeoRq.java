/**
 * 
 */
package org.sieca.everis.pdcc.model.prechequeoMigratorio;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class PrechequeoRq extends RequestBody{
	
    private String consecutivo;
    private String paisNotifica;
    private String paisesNotificados;
    private String documentoReferencia;
    private String codigoConductor;
	/**
	 * 
	 */
	public PrechequeoRq() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @return the consecutivo
	 */
	public String getConsecutivo() {
		return consecutivo;
	}
	/**
	 * @param consecutivo the consecutivo to set
	 */
	public void setConsecutivo(String consecutivo) {
		this.consecutivo = consecutivo;
	}
	/**
	 * @return the paisNotifica
	 */
	public String getPaisNotifica() {
		return paisNotifica;
	}
	/**
	 * @param paisNotifica the paisNotifica to set
	 */
	public void setPaisNotifica(String paisNotifica) {
		this.paisNotifica = paisNotifica;
	}
	/**
	 * @return the paisesNotificados
	 */
	public String getPaisesNotificados() {
		return paisesNotificados;
	}
	/**
	 * @param paisesNotificados the paisesNotificados to set
	 */
	public void setPaisesNotificados(String paisesNotificados) {
		this.paisesNotificados = paisesNotificados;
	}
	/**
	 * @return the documentoReferencia
	 */
	public String getDocumentoReferencia() {
		return documentoReferencia;
	}
	/**
	 * @param documentoReferencia the documentoReferencia to set
	 */
	public void setDocumentoReferencia(String documentoReferencia) {
		this.documentoReferencia = documentoReferencia;
	}
	/**
	 * @return the codigoConductor
	 */
	public String getCodigoConductor() {
		return codigoConductor;
	}
	/**
	 * @param codigoConductor the codigoConductor to set
	 */
	public void setCodigoConductor(String codigoConductor) {
		this.codigoConductor = codigoConductor;
	}
    
    

}
