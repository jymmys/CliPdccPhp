/**
 * 
 */
package org.sieca.everis.pdcc.model.exportacion.anulacion;
import org.sieca.everis.pdcc.model.util.RequestBody;
import org.sieca.everis.pdcc.model.exportacion.*;
import java.util.List;
/**
 * @author ytorregl
 *
 */
public class ExportacionAnulacionActualizarRq extends RequestBody{
	
    private Declarante declarante;
    private Declaracion declaracion;
    private Factura factura;
    private Transporte transporte;
    private DetalleCarga detalleCarga;
    private DetalleTransporte detalleTransporte;
    private Exportador exportador;
    private Importador importador;
    private List<Articulo> articulos;
    private Impuesto impuesto;
    private Pago pago;
    private String estado;
	/**
	 * 
	 */
	public ExportacionAnulacionActualizarRq() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @return the declarante
	 */
	public Declarante getDeclarante() {
		return declarante;
	}
	/**
	 * @param declarante the declarante to set
	 */
	public void setDeclarante(Declarante declarante) {
		this.declarante = declarante;
	}
	/**
	 * @return the declaracion
	 */
	public Declaracion getDeclaracion() {
		return declaracion;
	}
	/**
	 * @param declaracion the declaracion to set
	 */
	public void setDeclaracion(Declaracion declaracion) {
		this.declaracion = declaracion;
	}
	/**
	 * @return the factura
	 */
	public Factura getFactura() {
		return factura;
	}
	/**
	 * @param factura the factura to set
	 */
	public void setFactura(Factura factura) {
		this.factura = factura;
	}
	/**
	 * @return the transporte
	 */
	public Transporte getTransporte() {
		return transporte;
	}
	/**
	 * @param transporte the transporte to set
	 */
	public void setTransporte(Transporte transporte) {
		this.transporte = transporte;
	}
	/**
	 * @return the detalleCarga
	 */
	public DetalleCarga getDetalleCarga() {
		return detalleCarga;
	}
	/**
	 * @param detalleCarga the detalleCarga to set
	 */
	public void setDetalleCarga(DetalleCarga detalleCarga) {
		this.detalleCarga = detalleCarga;
	}
	/**
	 * @return the detalleTransporte
	 */
	public DetalleTransporte getDetalleTransporte() {
		return detalleTransporte;
	}
	/**
	 * @param detalleTransporte the detalleTransporte to set
	 */
	public void setDetalleTransporte(DetalleTransporte detalleTransporte) {
		this.detalleTransporte = detalleTransporte;
	}
	/**
	 * @return the exportador
	 */
	public Exportador getExportador() {
		return exportador;
	}
	/**
	 * @param exportador the exportador to set
	 */
	public void setExportador(Exportador exportador) {
		this.exportador = exportador;
	}
	/**
	 * @return the importador
	 */
	public Importador getImportador() {
		return importador;
	}
	/**
	 * @param importador the importador to set
	 */
	public void setImportador(Importador importador) {
		this.importador = importador;
	}
	/**
	 * @return the articulos
	 */
	public List<Articulo> getArticulos() {
		return articulos;
	}
	/**
	 * @param articulos the articulos to set
	 */
	public void setArticulos(List<Articulo> articulos) {
		this.articulos = articulos;
	}
	/**
	 * @return the impuesto
	 */
	public Impuesto getImpuesto() {
		return impuesto;
	}
	/**
	 * @param impuesto the impuesto to set
	 */
	public void setImpuesto(Impuesto impuesto) {
		this.impuesto = impuesto;
	}
	/**
	 * @return the pago
	 */
	public Pago getPago() {
		return pago;
	}
	/**
	 * @param pago the pago to set
	 */
	public void setPago(Pago pago) {
		this.pago = pago;
	}
	/**
	 * @return the estado
	 */
	public String getEstado() {
		return estado;
	}
	/**
	 * @param estado the estado to set
	 */
	public void setEstado(String estado) {
		this.estado = estado;
	}


}
